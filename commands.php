<?php
$pageTitle = "Commands Reference - Nexi Bot Documentation";
$pageDescription = "Complete reference guide for all Nexi Bot commands with usage examples, parameters, and permission requirements.";
include 'includes/header.php';
?>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="sidebar">
                <h3>Commands</h3>
                <ul>
                    <li><a href="#overview" class="active">Overview</a></li>
                    <li><a href="#admin">Administration</a></li>
                    <li><a href="#moderation">Moderation</a></li>
                    <li><a href="#music">Music System</a></li>
                    <li><a href="#community">Community</a></li>
                    <li><a href="#utility">Utility</a></li>
                    <li><a href="#premium">Premium Commands</a></li>
                    <li><a href="#gaming">Gaming</a></li>
                </ul>
            </div>
            
            <div class="content-main">
                <h1>Commands Reference</h1>
                <p>Complete guide to all Nexi Bot commands. Use this reference to discover powerful features and learn how to use them effectively in your Discord server.</p>

                <div class="alert alert-info">
                    <strong>How to Read This Guide:</strong> Commands marked with Premium require premium subscription. Permission levels range from none to Administrator. All commands use Discord's slash command system.
                </div>

                <h2 id="overview">Command Overview</h2>
                
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">75+</div>
                        <div class="stat-label">Total Commands</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">45</div>
                        <div class="stat-label">Free Commands</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">30+</div>
                        <div class="stat-label">Premium Commands</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Slash Commands</div>
                    </div>
                </div>

                <h3>Command Format</h3>
                <div class="command-card">
                    <h4>Understanding Command Syntax</h4>
                    <ul>
                        <li><code>&lt;required&gt;</code> - Required parameter</li>
                        <li><code>[optional]</code> - Optional parameter</li>
                        <li><code>command subcommand</code> - Command with subcommands</li>
                        <li>Premium - Premium feature required</li>
                    </ul>
                    
                    <h4>Permission Levels</h4>
                    <ul>
                        <li><strong>None:</strong> Any server member can use</li>
                        <li><strong>Moderate Members:</strong> Can timeout, kick, ban users</li>
                        <li><strong>Manage Server:</strong> Can modify server settings</li>
                        <li><strong>Administrator:</strong> Full server control</li>
                    </ul>
                </div>

                <h2 id="admin">Administration Commands</h2>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>/admin</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Administrator</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>Server administration and configuration management.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/admin backup</code> - Create server configuration backup</li>
                            <li><code>/admin restore</code> - Restore server configuration</li>
                            <li><code>/admin settings</code> - View current server settings</li>
                            <li><code>/admin permissions</code> - Manage bot permissions</li>
                            <li><code>/admin reset</code> - Reset specific configurations</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/config</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Administrator</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Partial</span>
                            </div>
                        </div>
                        <p>Interactive configuration panel for all bot features.</p>
                        
                        <h4>Configuration Sections:</h4>
                        <ul>
                            <li><strong>Feature Toggles:</strong> Enable/disable features</li>
                            <li><strong>Channel Setup:</strong> Configure channels and roles</li>
                            <li><strong>API Keys:</strong> Premium Integration management</li>
                            <li><strong>Advanced Settings:</strong> Premium Custom automation</li>
                            <li><strong>Export/Import:</strong> Premium Configuration backup</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/setup</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Administrator</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>Initial bot setup and configuration wizard.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/setup quick</code> - Quick setup wizard</li>
                            <li><code>/setup advanced</code> - Advanced setup options</li>
                            <li><code>/setup welcome</code> - Setup welcome system</li>
                            <li><code>/setup moderation</code> - Setup moderation</li>
                            <li><code>/setup logging</code> - Setup logging system</li>
                        </ul>
                    </div>
                </div>

                <h2 id="moderation">Moderation Commands</h2>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>/moderation</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Moderate Members</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>Essential moderation tools for server management.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/moderation kick &lt;user&gt; [reason]</code> - Kick a user</li>
                            <li><code>/moderation ban &lt;user&gt; [reason]</code> - Ban a user</li>
                            <li><code>/moderation unban &lt;user&gt;</code> - Unban a user</li>
                            <li><code>/moderation mute &lt;user&gt; [duration] [reason]</code> - Mute a user</li>
                            <li><code>/moderation unmute &lt;user&gt;</code> - Unmute a user</li>
                            <li><code>/moderation warn &lt;user&gt; [reason]</code> - Warn a user</li>
                            <li><code>/moderation warnings &lt;user&gt;</code> - View user warnings</li>
                            <li><code>/moderation clear &lt;amount&gt; [user]</code> - Clear messages</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/aimoderation</h3>
                            <span class="premium-badge">Premium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Moderate Members</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Yes</span>
                            </div>
                        </div>
                        <p>AI-powered content moderation and filtering.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/aimoderation enable</code> - Enable AI moderation</li>
                            <li><code>/aimoderation disable</code> - Disable AI moderation</li>
                            <li><code>/aimoderation config</code> - Configure AI settings</li>
                            <li><code>/aimoderation sensitivity &lt;level&gt;</code> - Set detection sensitivity</li>
                            <li><code>/aimoderation whitelist &lt;channel&gt;</code> - Whitelist channels</li>
                            <li><code>/aimoderation logs</code> - View AI moderation logs</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/mod-advanced</h3>
                            <span class="premium-badge">Premium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Moderate Members</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Yes</span>
                            </div>
                        </div>
                        <p>Advanced moderation tools and automation.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/mod-advanced automod</code> - Configure advanced automod</li>
                            <li><code>/mod-advanced patterns</code> - Set detection patterns</li>
                            <li><code>/mod-advanced actions</code> - Configure automated actions</li>
                            <li><code>/mod-advanced whitelist</code> - Manage whitelisted users</li>
                            <li><code>/mod-advanced reports</code> - View moderation reports</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/slowmode</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Manage Channels</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>Channel slowmode management and control.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/slowmode set &lt;seconds&gt; [channel]</code> - Set slowmode</li>
                            <li><code>/slowmode remove [channel]</code> - Remove slowmode</li>
                            <li><code>/slowmode preset &lt;preset&gt; [channel]</code> - Apply preset</li>
                            <li><code>/slowmode info [channel]</code> - View current slowmode</li>
                        </ul>
                    </div>
                </div>

                <h2 id="music">Music System Commands</h2>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>/music</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">None</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Partial</span>
                            </div>
                        </div>
                        <p>Core music playback and queue management.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/music play &lt;song&gt;</code> - Play a song</li>
                            <li><code>/music pause</code> - Pause current song</li>
                            <li><code>/music resume</code> - Resume paused song</li>
                            <li><code>/music skip</code> - Skip current song</li>
                            <li><code>/music stop</code> - Stop music and clear queue</li>
                            <li><code>/music queue</code> - View music queue</li>
                            <li><code>/music volume &lt;level&gt;</code> - Set volume level</li>
                            <li><code>/music shuffle</code> - Shuffle queue</li>
                            <li><code>/music repeat</code> - Toggle repeat mode</li>
                            <li><code>/music nowplaying</code> - Show current song</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/music-fx</h3>
                            <span class="premium-badge">Premium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">None</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Yes</span>
                            </div>
                        </div>
                        <p>Advanced audio effects and processing.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/music-fx bass &lt;level&gt;</code> - Adjust bass level</li>
                            <li><code>/music-fx treble &lt;level&gt;</code> - Adjust treble level</li>
                            <li><code>/music-fx echo &lt;level&gt;</code> - Add echo effect</li>
                            <li><code>/music-fx reverb &lt;level&gt;</code> - Add reverb effect</li>
                            <li><code>/music-fx speed &lt;multiplier&gt;</code> - Change playback speed</li>
                            <li><code>/music-fx reset</code> - Reset all effects</li>
                        </ul>
                    </div>
                </div>

                <h2 id="community">Community Commands</h2>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>/leveling</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Administrator</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>Server leveling system and XP management.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/leveling enable</code> - Enable leveling system</li>
                            <li><code>/leveling disable</code> - Disable leveling system</li>
                            <li><code>/leveling rank</code> - Check your rank</li>
                            <li><code>/leveling leaderboard</code> - View server leaderboard</li>
                            <li><code>/leveling rewards &lt;level&gt; &lt;role&gt;</code> - Set level rewards</li>
                            <li><code>/leveling multiplier &lt;channel&gt; &lt;multiplier&gt;</code> - Set XP multipliers</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/afk</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">None</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>Away-from-keyboard status management.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/afk set &lt;reason&gt;</code> - Set your AFK status</li>
                            <li><code>/afk remove</code> - Remove your AFK status</li>
                            <li><code>/afk list</code> - View currently AFK members</li>
                            <li><code>/afk settings</code> - Configure AFK system (Admin only)</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/birthdays</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">None</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>Birthday tracking and celebration system.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/birthdays set &lt;date&gt;</code> - Set your birthday</li>
                            <li><code>/birthdays remove</code> - Remove your birthday</li>
                            <li><code>/birthdays list</code> - View upcoming birthdays</li>
                            <li><code>/birthdays channel &lt;channel&gt;</code> - Set birthday channel (Admin)</li>
                            <li><code>/birthdays role &lt;role&gt;</code> - Set birthday role (Admin)</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/reactionroles</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Manage Roles</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>Self-assignable roles via reactions.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/reactionroles create</code> - Create reaction role message</li>
                            <li><code>/reactionroles add &lt;message_id&gt; &lt;emoji&gt; &lt;role&gt;</code> - Add reaction role</li>
                            <li><code>/reactionroles remove &lt;message_id&gt; &lt;emoji&gt;</code> - Remove reaction role</li>
                            <li><code>/reactionroles list</code> - List all reaction roles</li>
                            <li><code>/reactionroles edit &lt;message_id&gt;</code> - Edit reaction role message</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/starboard</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Administrator</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>Highlight popular messages in a starboard.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/starboard setup &lt;channel&gt;</code> - Setup starboard</li>
                            <li><code>/starboard threshold &lt;amount&gt;</code> - Set star threshold</li>
                            <li><code>/starboard emoji &lt;emoji&gt;</code> - Set starboard emoji</li>
                            <li><code>/starboard disable</code> - Disable starboard</li>
                            <li><code>/starboard stats</code> - View starboard statistics</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/customcommands</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Administrator</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>Create and manage custom server commands.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/customcommands create &lt;name&gt; &lt;response&gt;</code> - Create custom command</li>
                            <li><code>/customcommands edit &lt;name&gt; &lt;response&gt;</code> - Edit existing command</li>
                            <li><code>/customcommands delete &lt;name&gt;</code> - Delete custom command</li>
                            <li><code>/customcommands list</code> - List all custom commands</li>
                            <li><code>/customcommands info &lt;name&gt;</code> - View command details</li>
                        </ul>
                    </div>
                </div>

                <h2 id="utility">Utility Commands</h2>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>/utility</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">None</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>General utility tools and information commands.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/utility userinfo &lt;user&gt;</code> - Get user information</li>
                            <li><code>/utility serverinfo</code> - Get server information</li>
                            <li><code>/utility avatar &lt;user&gt;</code> - Display user avatar</li>
                            <li><code>/utility invite</code> - Get bot invite link</li>
                            <li><code>/utility ping</code> - Check bot latency</li>
                            <li><code>/utility timestamp &lt;time&gt;</code> - Generate Discord timestamp</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/serverstats</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">None</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>Detailed server statistics and metrics.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/serverstats overview</code> - Server overview</li>
                            <li><code>/serverstats members</code> - Member statistics</li>
                            <li><code>/serverstats channels</code> - Channel statistics</li>
                            <li><code>/serverstats activity</code> - Activity statistics</li>
                            <li><code>/serverstats growth</code> - Growth statistics</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/globalstats</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">None</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">No</span>
                            </div>
                        </div>
                        <p>Global bot statistics across all servers.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/globalstats servers</code> - Total servers using Nexi Bot</li>
                            <li><code>/globalstats users</code> - Total users across all servers</li>
                            <li><code>/globalstats commands</code> - Most used commands</li>
                            <li><code>/globalstats uptime</code> - Bot uptime statistics</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/polls</h3>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Manage Messages</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Partial</span>
                            </div>
                        </div>
                        <p>Create and manage polls for community feedback.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/polls create &lt;question&gt;</code> - Create a simple poll</li>
                            <li><code>/polls advanced</code> - Premium Create advanced poll</li>
                            <li><code>/polls close &lt;poll_id&gt;</code> - Close a poll</li>
                            <li><code>/polls results &lt;poll_id&gt;</code> - View poll results</li>
                            <li><code>/polls list</code> - List active polls</li>
                        </ul>
                    </div>
                </div>

                <h2 id="premium">Premium Commands</h2>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>/analytics</h3>
                            <span class="premium-badge">Premium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Administrator</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Yes</span>
                            </div>
                        </div>
                        <p>Comprehensive server analytics and insights.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/analytics overview</code> - Server analytics overview</li>
                            <li><code>/analytics members</code> - Member growth analytics</li>
                            <li><code>/analytics messages</code> - Message activity analytics</li>
                            <li><code>/analytics channels</code> - Channel usage analytics</li>
                            <li><code>/analytics export</code> - Export analytics data</li>
                            <li><code>/analytics reports</code> - Generate custom reports</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/economy</h3>
                            <span class="premium-badge">Premium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">None</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Yes</span>
                            </div>
                        </div>
                        <p>Virtual economy system for your server.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/economy balance</code> - Check your balance</li>
                            <li><code>/economy daily</code> - Claim daily rewards</li>
                            <li><code>/economy transfer &lt;user&gt; &lt;amount&gt;</code> - Transfer money</li>
                            <li><code>/economy leaderboard</code> - View wealth leaderboard</li>
                            <li><code>/economy shop</code> - View server shop</li>
                            <li><code>/economy buy &lt;item&gt;</code> - Purchase shop item</li>
                            <li><code>/economy work</code> - Earn money through work</li>
                            <li><code>/economy rob &lt;user&gt;</code> - Attempt to rob another user</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/giveaways</h3>
                            <span class="premium-badge">Premium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Manage Server</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Yes</span>
                            </div>
                        </div>
                        <p>Advanced giveaway management system.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/giveaways create</code> - Create a new giveaway</li>
                            <li><code>/giveaways end &lt;giveaway_id&gt;</code> - End a giveaway early</li>
                            <li><code>/giveaways reroll &lt;giveaway_id&gt;</code> - Reroll giveaway winner</li>
                            <li><code>/giveaways list</code> - List active giveaways</li>
                            <li><code>/giveaways edit &lt;giveaway_id&gt;</code> - Edit giveaway details</li>
                            <li><code>/giveaways delete &lt;giveaway_id&gt;</code> - Delete a giveaway</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/banappeals</h3>
                            <span class="premium-badge">Premium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">Administrator</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Yes</span>
                            </div>
                        </div>
                        <p>Structured ban appeals management system.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/banappeals setup</code> - Setup appeals system</li>
                            <li><code>/banappeals channel &lt;channel&gt;</code> - Set appeals channel</li>
                            <li><code>/banappeals review &lt;appeal_id&gt;</code> - Review an appeal</li>
                            <li><code>/banappeals approve &lt;appeal_id&gt;</code> - Approve an appeal</li>
                            <li><code>/banappeals deny &lt;appeal_id&gt;</code> - Deny an appeal</li>
                            <li><code>/banappeals list</code> - List pending appeals</li>
                        </ul>
                    </div>
                </div>

                <h2 id="gaming">Gaming Commands</h2>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>/erlc</h3>
                            <span class="premium-badge">Premium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">None</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Yes</span>
                            </div>
                        </div>
                        <p>Emergency Response: Liberty County integration.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/erlc player &lt;username&gt;</code> - Look up player information</li>
                            <li><code>/erlc server &lt;server_id&gt;</code> - Check server status</li>
                            <li><code>/erlc stats &lt;username&gt;</code> - View player statistics</li>
                            <li><code>/erlc verify &lt;username&gt;</code> - Verify ERLC account</li>
                            <li><code>/erlc leaderboard</code> - View server leaderboard</li>
                            <li><code>/erlc notifications</code> - Manage ERLC notifications</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/roblox</h3>
                            <span class="premium-badge">Premium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">None</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Yes</span>
                            </div>
                        </div>
                        <p>Comprehensive Roblox platform integration.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/roblox verify &lt;username&gt;</code> - Verify Roblox account</li>
                            <li><code>/roblox profile &lt;username&gt;</code> - View Roblox profile</li>
                            <li><code>/roblox group &lt;group_id&gt;</code> - View group information</li>
                            <li><code>/roblox games &lt;username&gt;</code> - View user's games</li>
                            <li><code>/roblox avatar &lt;username&gt;</code> - Display user avatar</li>
                        </ul>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>/robloxappcentre</h3>
                            <span class="premium-badge">Premium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Permissions:</span>
                                <span class="meta-value">None</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Premium:</span>
                                <span class="meta-value">Yes</span>
                            </div>
                        </div>
                        <p>Roblox game review and rating system.</p>
                        
                        <h4>Subcommands:</h4>
                        <ul>
                            <li><code>/robloxappcentre search &lt;game&gt;</code> - Search for games</li>
                            <li><code>/robloxappcentre review &lt;game_id&gt;</code> - Review a game</li>
                            <li><code>/robloxappcentre ratings &lt;game_id&gt;</code> - View game ratings</li>
                            <li><code>/robloxappcentre submit &lt;game_id&gt;</code> - Submit game for review</li>
                            <li><code>/robloxappcentre featured</code> - View featured games</li>
                        </ul>
                    </div>
                </div>

                <div class="alert alert-success">
                    <h4>Command Tips</h4>
                    <ul>
                        <li><strong>Permissions:</strong> Ensure proper role hierarchy for moderation commands</li>
                        <li><strong>Premium Features:</strong> Upgrade to unlock advanced commands</li>
                        <li><strong>Help:</strong> Use <code>/help &lt;command&gt;</code> for detailed usage info</li>
                        <li><strong>Support:</strong> Join our <a href="https://discord.gg/nexibot" target="_blank">Discord server</a> for assistance</li>
                    </ul>
                    
                    <div style="margin-top: 20px;">
                        <a href="/premium" class="btn btn-premium">Unlock Premium Commands</a>
                        <a href="/troubleshooting" class="btn btn-secondary">Troubleshooting Guide</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
